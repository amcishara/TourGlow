<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Neighborhood Discovery</title>

    <link rel="stylesheet" href="styles.css"> 


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/handlebars/4.7.7/handlebars.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="neighborhood_discovery.css" rel="stylesheet">
    <script src="neighborhood_discovery.js"></script>
    <script>
      const CONFIGURATION = {
        "capabilities": {"search":true,"distances":false,"directions":false,"contacts":true,"atmospheres":false,"thumbnails":true},
        "pois": [
          {"placeId": "ChIJ0Xkxp9-g_DoR3w7_DBXBBB4"},
          {"placeId": "ChIJTX-En39l5DoRCO1dco_YUFY"},
          {"placeId": "ChIJv69ve9Ki5ToRNNv1nbXW78Y"},
          {"placeId": "ChIJ9ftJsS1m4zoRh-gVwQrXZYE"},
          {"placeId": "ChIJ_9U2xtQ_4ToRspMatLlWFLg"},
          {"placeId": "ChIJeX6IiP8I5DoR14DZ-5_nEq8"},
          {"placeId": "ChIJx1QVTkOA4zoRnH2TTEAIFik"},
         
        ],
        "mapRadius": 1000000,
        "mapOptions": {"center":{"lat":7.873054,"lng":80.771797},"fullscreenControl":true,"mapTypeControl":true,"streetViewControl":false,"zoom":16,"zoomControl":true,"maxZoom":20,"mapId":""},
        "mapsApiKey": "AIzaSyAA2hWL95VinSx40y9xlKcnpY4ESDwL8Ik"
      };

      function initMap() {
        new NeighborhoodDiscovery(CONFIGURATION);
      }
    </script>
    <script id="nd-place-results-tmpl" type="text/x-handlebars-template">
      {{#each places}}
        <li class="place-result">
          <div class="text">
            <button class="name">{{name}}</button>
            <div class="info">{{type}}</div>
          </div>
          <button class="photo" style="background-image:url({{photos.0.urlSmall}})" aria-label="show photo in viewer"></button>
        </li>
      {{/each}}
    </script>
    <script id="nd-place-details-tmpl" type="text/x-handlebars-template">
      <div class="navbar">
        <button class="back-button">
          <img class="icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/arrow_back/v11/24px.svg" alt="back"/>
          Back
        </button>
      </div>
      <header>
        <h2>{{name}}</h2>
        <div class="info">
          <a href="{{url}}" target="_blank">See on Google Maps</a>
        </div>
        {{#if type}}
          <div class="info">{{type}}</div>
        {{/if}}
      </header>
      <div class="section">
        {{#if address}}
          <div class="contact">
            <img src="https://fonts.gstatic.com/s/i/googlematerialicons/place/v10/24px.svg" alt="Address" class="icon"/>
            <div class="text">
              {{address}}
            </div>
          </div>
        {{/if}}
        {{#if website}}
          <div class="contact">
            <img src="https://fonts.gstatic.com/s/i/googlematerialicons/public/v10/24px.svg" alt="Website" class="icon"/>
            <div class="text">
              <a href="{{website}}" target="_blank">{{websiteDomain}}</a>
            </div>
          </div>
        {{/if}}
        {{#if phoneNumber}}
          <div class="contact">
            <img src="https://fonts.gstatic.com/s/i/googlematerialicons/phone/v10/24px.svg" alt="Phone number" class="icon"/>
            <div class="text">
              {{phoneNumber}}
            </div>
          </div>
        {{/if}}
        {{#if openingHours}}
          <div class="contact">
            <img src="https://fonts.gstatic.com/s/i/googlematerialicons/schedule/v12/24px.svg" alt="Opening hours" class="icon"/>
            <div class="text">
              {{#each openingHours}}
                <div>
                  <span class="weekday">{{days}}</span>
                  <span class="hours">{{hours}}</span>
                </div>
              {{/each}}
            </div>
          </div>
        {{/if}}
      </div>
      {{#if photos}}
        <div class="photos section">
          {{#each photos}}
            <button class="photo" style="background-image:url({{urlLarge}})" aria-label="show photo in viewer"></button>
          {{/each}}
        </div>
      {{/if}}
      {{#if php_attributions}}
        <div class="section">
          {{#each php_attributions}}
            <p class="attribution">{{{this}}}</p>
          {{/each}}
        </div>
      {{/if}}
    </script>
  </head>
  <body>
    <div class="neighborhood-discovery">
      <div class="places-panel panel no-scroll">
        <header class="navbar">
          <div class="search-input">
            <input class="place-search-input" placeholder="Search nearby places">
            <button class="place-search-button">
              <img src="https://fonts.gstatic.com/s/i/googlematerialicons/search/v11/24px.svg" alt="search"/>
            </button>
          </div>
        </header>
        <div class="results">
          <ul class="place-results-list"></ul>
        </div>
        <button class="show-more-button sticky">
          <span>Show More</span>
          <img class="right" src="https://fonts.gstatic.com/s/i/googlematerialicons/expand_more/v11/24px.svg" alt="expand"/>
        </button>
      </div>
      <div class="details-panel panel"></div>
      <div class="map"></div>
      <div class="photo-modal">
        <img alt="place photo"/>
        <div>
          <button class="back-button">
            <img class="icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/arrow_back/v11/24px.svg" alt="back"/>
          </button>
          <div class="photo-text">
            <div class="photo-place"></div>
            <div class="photo-attrs">Photo by <span></span></div>
          </div>
        </div>
      </div>
      <svg class="marker-pin" xmlns="http://www.w3.o2000/svg" width="26" height="38" fill="none">
        <path d="M13 0C5.817 0 0 5.93 0 13.267c0 7.862 5.59 10.81 9.555 17.624C12.09 35.248 11.342 38 13 38c1.723 0 .975-2.817 3.445-7.043C20.085 24.503 26 21.162 26 13.267 26 5.93 20.183 0 13 0Z"/>
      </svg>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA2hWL95VinSx40y9xlKcnpY4ESDwL8Ik&callback=initMap&libraries=places,geometry&solution_channel=GMP_QB_neighborhooddiscovery_v2_cADF" async defer></script>
    <script src="script.js"></script>
</body>
</html>