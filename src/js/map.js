'use strict'

//Display the initial place
var map = L.map('mapid').setView([45, 2], 5);

//API
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

//Search city
var searchControl = L.esri.Geocoding.geosearch().addTo(map);

var results = L.layerGroup().addTo(map);

searchControl.on('results', function (data) {
  results.clearLayers();
  for (var i = data.results.length - 1; i >= 0; i--) {
    results.addLayer(L.marker(data.results[i].latlng, { icon: cineBuds })).addTo(map);
  }
});

// Call the getContainer routine.
var htmlObject = searchControl.getContainer();
// Get the desired parent node.
var a = document.getElementById('searchControl');
// Finally append that node to the new parent, recursively searching out and re-parenting nodes.
function setParent(el, newParent) {
  newParent.appendChild(el);
}
setParent(htmlObject, a);

//Icon Symbole
var cineBuds = L.icon({
  iconUrl: './src/assets/image/logo.png',

  iconSize: [105, 63], // size of the icon
  iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
  popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});