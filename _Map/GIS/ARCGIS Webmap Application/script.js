var map, home, search; //esri vars
var featureLayerTemplate, featureLayer, featureLayer2, graphic; //feature layers
var layer1, layer2; //csv layers, if any
var placesLayer, RuskinLayer, PlaceHolderLayer; //timeline data arrays

require(["esri/map",
    "esri/layers/FeatureLayer",
    "esri/geometry/Extent",
    "esri/SpatialReference",
    "esri/request",
    "dojo/on",
	"dojo/ready",
    "dojo/_base/array",
    "esri/tasks/FeatureSet",
    "esri/geometry/Point",
    "esri/geometry/Polyline",
    "esri/graphic",
    "esri/layers/GraphicsLayer",
    "esri/symbols/SimpleMarkerSymbol",
    "esri/dijit/Search",
    "esri/dijit/PopupTemplate",
    "esri/dijit/HomeButton",
    "esri/dijit/BasemapLayer",//adds basemap to layer
    "esri/dijit/Basemap",
    "esri/layers/CSVLayer",
    "dojo/i18n!esri/nls/jsapi",
    "esri/symbols/PictureMarkerSymbol",
    "esri/renderers/SimpleRenderer",
    "esri/InfoTemplate",
    "dojo/domReady!"

], function(Map, FeatureLayer , Extent, SpatialReference, esriRequest, on, ready, array, FeatureSet, Point, Polyline, Graphic, GraphicsLayer, SimpleMarkerSymbol, Search, PopupTemplate, HomeButton, BasemapLayer, Basemap, CSVLayer, esriBundle, PictureMarkerSymbol, SimpleRenderer, InfoTemplate) {

    esriBundle.widgets.homeButton.home.title = "Map Home"; // quick fix for home button hover over
    loadMap(); // exactly what it says, loads the map from esri
    loadFeatureLayers(); //loads Ruskin layer and the lines
    loadCSVLayers(); // temp loads earthquake data
    loadHome(); //loads the home button

    function loadMap() {
        map = new Map("mapDiv", {
            center: [6.40941, 47.34249],
            zoom: 5,
            //basemap: "streets"
            basemap: "gray" //I think this looks nice
        });
    }
    function loadFeatureLayers() {
        var featureCollection = {
            "layerDefinition": null,
            "featureSet": {
                "features": [],
                "geometryType": "esriGeometryPoint"
            }
        };
        featureCollection.layerDefinition = {
            "geometryType": "esriGeometryPoint",
            "objectIdField": "ObjectID",
            "drawingInfo": {
                "renderer": {
                    "type": "simple",
                    "symbol": {
                        "type": "esriPMS",
                        "url": "resources/markers/StaticIcon1.png",
                        "contentType": "resources/markers/png",
                        "width": 15,
                        "height": 15
                    }
                }
            },
            "fields": [{
                "name": "ObjectID",
                "alias": "ObjectID",
                "type": "esriFieldTypeOID"
            }, {
                "name": "description",
                "alias": "Description",
                "type": "esriFieldTypeString"
            }, {
                "name": "title",
                "alias": "Title",
                "type": "esriFieldTypeString"
            }]
        };
        featureLayer = new FeatureLayer(featureCollection, {
            id: "RuskinLayer",
            mode: FeatureLayer.MODE_SNAPSHOT,
            outFields: ["*"]
        });

        var featureCollection2 = {
            "layerDefinition": null,
            "featureSet": {
                "features": [],
                "geometryType": "esriGeometryPolyline"
            }
        };
        featureCollection2.layerDefinition = {
            "geometryType": "esriGeometryPolyline",
            "objectIdField": "ObjectID",
            "drawingInfo": {
                "renderer": {
                    "type": "simple",
                    "symbol": {
                        "type": "esriSLS",
                        "style": "STYLE_SOLID",
                        "color": ([24,143,17]),
                        "width":.75
                    }
                }
            },
            "fields": [{
                "name": "ObjectID",
                "alias": "ObjectID",
                "type": "esriFieldTypeOID"
            }, {
                "name": "description",
                "alias": "Description",
                "type": "esriFieldTypeString"
            }, {
                "name": "title",
                "alias": "Title",
                "type": "esriFieldTypeString"
            }]
        };
        featureLayer2 = new FeatureLayer(featureCollection2, {
            id: "lineLayer",
            mode: FeatureLayer.MODE_SNAPSHOT,
            outFields: ["*"]
        });

        map.on("layers-add-result", function (evt) {
            requestData();
            requestLines();
        });

        featureLayer.on("edits-complete", function (event) {
           //searchBar();
        });

        map.addLayers([featureLayer2, featureLayer]);
    }
    function loadCSVLayers() {
        //this CSV file will be our own
        layer1 = new CSVLayer("CSV/2.5_week.csv", {
            copyright: "USGS.gov"
        });
        var marker = new PictureMarkerSymbol("resources/markers/StaticIcon1.png", 18, 18);
        var renderer = new SimpleRenderer(marker);
        layer1.setRenderer(renderer);
        var template = new InfoTemplate("${type}", "${place}");
        layer1.setInfoTemplate(template);
        ;
        map.addLayer(layer1);

        layer2 = new CSVLayer("CSV/places_mockup2.csv");
        var marker2 = new PictureMarkerSymbol("resources/markers/StaticIcon2.png", 20, 20);
        var renderer2 = new SimpleRenderer(marker2);
        layer2.setRenderer(renderer2);
        var template2 = new InfoTemplate("${place_name}", "${place_note}");
        layer2.setInfoTemplate(template2);
        ;
        map.addLayer(layer2);
    }
    function loadHome() {
        home = new HomeButton({
            map: map,
        }, "HomeButton");
        home.startup();
    }

    function requestData(){
        var requestHandle = esriRequest({
            url: "GeoJsonData/AllPoints.json",
			handleAs: "json",
			timeout: 0,			
            callbackParamName: "jsoncallback",
        });
        requestHandle.then(requestDataSucceed, requestFailed);
    }
    function requestLines(){

        var requestHandle = esriRequest({
            url : "GeoJsonData/data.json",
            handleAs: "json",
            timeout : 0,
            callbackParamName: "jsoncallback"
        });
        requestHandle.then(requestLinesSucceed, requestFailed);
    }
    function requestLinesSucceed(response, io) {
        //loop through the items and add to the feature layer
        var features = [];
        var geometry;
        array.forEach(response.features, function(item) {
            if(item.geometry.coordinates.length == 4){
                geometry = new Polyline([item.geometry.coordinates[0], item.geometry.coordinates[1], item.geometry.coordinates[1], item.geometry.coordinates[2], item.geometry.coordinates[2], item.geometry.coordinates[3]]);
            }
            else if(item.geometry.coordinates.length == 8)
            {
                var geometry = new Polyline([item.geometry.coordinates[0], item.geometry.coordinates[1], item.geometry.coordinates[1], item.geometry.coordinates[2], item.geometry.coordinates[2], item.geometry.coordinates[3],
                    item.geometry.coordinates[3], item.geometry.coordinates[4], item.geometry.coordinates[4], item.geometry.coordinates[5], item.geometry.coordinates[5], item.geometry.coordinates[6], item.geometry.coordinates[6],
                    item.geometry.coordinates[7]]);
            }
            else if(item.geometry.coordinates.length == 9)
            {
                var geometry = new Polyline([item.geometry.coordinates[0], item.geometry.coordinates[1], item.geometry.coordinates[1], item.geometry.coordinates[2], item.geometry.coordinates[2], item.geometry.coordinates[3],
                    item.geometry.coordinates[3], item.geometry.coordinates[4], item.geometry.coordinates[4], item.geometry.coordinates[5], item.geometry.coordinates[5], item.geometry.coordinates[6], item.geometry.coordinates[6],
                    item.geometry.coordinates[7], item.geometry.coordinates[7], item.geometry.coordinates[8]]);
            }
            else if(item.geometry.coordinates.length == 14)
            {
                var geometry = new Polyline([item.geometry.coordinates[0], item.geometry.coordinates[1], item.geometry.coordinates[1], item.geometry.coordinates[2], item.geometry.coordinates[2], item.geometry.coordinates[3],
                    item.geometry.coordinates[3], item.geometry.coordinates[4], item.geometry.coordinates[4], item.geometry.coordinates[5], item.geometry.coordinates[5], item.geometry.coordinates[6], item.geometry.coordinates[6],
                    item.geometry.coordinates[7], item.geometry.coordinates[7], item.geometry.coordinates[8], item.geometry.coordinates[8], item.geometry.coordinates[9], item.geometry.coordinates[9], item.geometry.coordinates[10],
                    item.geometry.coordinates[10], item.geometry.coordinates[11], item.geometry.coordinates[11], item.geometry.coordinates[12], item.geometry.coordinates[12], item.geometry.coordinates[13]]);
            }
            else if(item.geometry.coordinates.length == 21)
            {
                var geometry = new Polyline([item.geometry.coordinates[0], item.geometry.coordinates[1], item.geometry.coordinates[1], item.geometry.coordinates[2], item.geometry.coordinates[2], item.geometry.coordinates[3],
                    item.geometry.coordinates[3], item.geometry.coordinates[4], item.geometry.coordinates[4], item.geometry.coordinates[5], item.geometry.coordinates[5], item.geometry.coordinates[6], item.geometry.coordinates[6],
                    item.geometry.coordinates[7], item.geometry.coordinates[7], item.geometry.coordinates[8], item.geometry.coordinates[8], item.geometry.coordinates[9], item.geometry.coordinates[9], item.geometry.coordinates[10],
                    item.geometry.coordinates[10], item.geometry.coordinates[11], item.geometry.coordinates[11], item.geometry.coordinates[12], item.geometry.coordinates[12], item.geometry.coordinates[13],
                    item.geometry.coordinates[13], item.geometry.coordinates[14],item.geometry.coordinates[14], item.geometry.coordinates[15],item.geometry.coordinates[15], item.geometry.coordinates[16],
                    item.geometry.coordinates[16], item.geometry.coordinates[17],item.geometry.coordinates[17], item.geometry.coordinates[18],item.geometry.coordinates[18], item.geometry.coordinates[19],
                    item.geometry.coordinates[19], item.geometry.coordinates[20]]);
            }

            graphic = new Graphic(geometry);
            features.push(graphic);


        });
        featureLayer2.applyEdits(features, null, null);
    }
    function requestDataSucceed(response, io) {
        var count = 1;
        var features = [];
        //loop through the items and add to the feature layer
        array.forEach(response.features, function(item) {

            var attr = {};
			attr["properties"] = item.properties.City_Names.toString();
            //pull in any additional attributes if required

            var geometry = new Point(item.geometry.coordinates[0], item.geometry.coordinates[1]);
            featureLayerTemplate = new InfoTemplate("Point Information","City_Name: "+ item.properties.City_Names.toString() + "</br>" + "Latitude: " + item.properties.y_latitude + "</br>" + "Longitude: " + item.properties.x_longitude);
            var pms = new PictureMarkerSymbol("resources/markers/green/NumberIcong"+ count +".png", 20, 20);
            graphic = new Graphic(geometry,pms,null,featureLayerTemplate);
            graphic.setAttributes(attr);
            features.push(graphic);
            count++;



        });
        featureLayer.applyEdits(features, null, null);
    }
    function requestFailed(error) {
        console.log('failed');
    }
    /*function searchBar() {
        search = new Search({
            enableButtonMode: true, //this enables the search widget to display as a single button
            enableLabel: false,
            enableInfoWindow: true,
            showInfoWindowOnSelect: false,
            map: map,
            //sources: [],
            zoomScale: 5000000
        }, "search");


        sources.push({
            featureLayer: placesLayer,
            infoTemplate: featureLayerTemplate,
            enableSuggestions: true,
            placeholder: "Calais",
            enableLabel: false,
            searchFields: ["properties.City_Names"],
            //displayField: "properties.City_Names".toString(),
            outFields: ["*"],
            name: "Ruskin",
            maxSuggestions: 2,
            exactMatch: false
        });

        //Set the sources above to the search widget
        search.set("sources", sources);

        search.startup();
    }*/
});

$(document).ready(function(){

    $.ajax({
        dataType: "json",
        url: "GeoJsonData/AllPoints.json",
        async: false,
        success: function(data) {
            placesLayer = data;
            console.log(placesLayer);
        }
    });

    $.ajax({
        type:'GET',
        url: 'CSV/places_mockup2.csv',
        dataType: 'text',
        success: function(data){
            RuskinLayer = $.csv.toObjects(data);
            console.log(RuskinLayer);
        }
    });

    $.ajax({
        type:'GET',
        url: 'CSV/2.5_week.csv',
        dataType: 'text',
        success: function(data){
            PlaceHolderLayer = $.csv.toObjects(data);
            console.log(PlaceHolderLayer);
        }
    });

    $(document).ajaxStop(function(){

        createBoxes();

        $("#layer1").click(function(){
            if (featureLayer.visible == true){
                featureLayer.hide();
                featureLayer2.hide();
            }else{
                featureLayer.show();
                featureLayer2.show();
            }
        });

        $("#layer2").click(function(){
            if (layer2.visible == true){
                layer2.hide();
            }else{
                layer2.show();
            }
        });

        $("#layer3").click(function() {
            if (layer1.visible == true) {
                layer1.hide();
            } else {
                layer1.show();
            }
        });

        $("#upArrow").mouseenter(function(){
            $("i").css("opacity",1);
        });

        $("#upArrow").mouseleave(function(){
            $("i").css("opacity",.5);
        });

        $("#upArrow").click(function(){
            $("i").toggleClass("fa-arrow-down");
            $("#footer").toggleClass("opened");
            $("#buttonContainer").toggle();
        });

        $("#timebutton1").click( function() {
            setVisibleContainer(1);
        });

        $("#timebutton2").click( function() {
            setVisibleContainer(2);
        });

        $("#timebutton3").click( function() {
            setVisibleContainer(3);
        });

        $("#slideLeft").click(function(){
            var div = $(this);
            var cont = getVisibleContainer();
            var rect = document.getElementById(cont).getBoundingClientRect();
            if(rect.left > 0){
                $("#"+cont).animate({left: "+=" + 20},"fast");
                $("#"+cont).animate({left: "-=" + 30},"fast");
                $("#"+cont).animate({left: "+=" + 10},"fast");
            }else{
                div.animate({width: '25px'},"fast");
                div.animate({width: '30px'}, "fast");
                $("#"+cont).animate({left: "+=" + ((window.innerWidth-110)/5)});
            }
        });

        $("#slideLeft").mouseenter(function(){
            $(this).css("opacity",1);
        });

        $("#slideLeft").mouseleave(function(){
            $(this).css("opacity",.5);
        });

        $("#slideRight").click(function(){
            var div = $(this);
            var cont = getVisibleContainer();
            var rect = document.getElementById(cont).getBoundingClientRect();
            if(rect.right < window.innerWidth-30){
                $("#"+cont).animate({left: "-=" + 20},"fast");
                $("#"+cont).animate({left: "+=" + 30},"fast");
                $("#"+cont).animate({left: "-=" + 10},"fast");
            }else{
                div.animate({width: '25px'},"fast");
                div.animate({width: '30px'}, "fast");
                $("#"+cont).animate({left: "-=" + ((window.innerWidth-110)/5)});
            }
        });

        $("#slideRight").mouseenter(function(){
            $(this).css("opacity",1);
        });

        $("#slideRight").mouseleave(function(){
            $(this).css("opacity",.5);
        });

        $(".box").click(function(){
            var id = (this).getAttribute("id");
            if(document.getElementById("popup")) {
                closePopup();
            }
            createPopup(id);
        });
    });
});

function createBoxes(){
    console.log("here");
    for(var container = 1; container<= 3; container++ ) {
        var element = document.getElementById("container" + container);
        if (container == 1) {
            for (var i in placesLayer.features) {
                var div = document.createElement("div");
                var att = document.createAttribute("class");
                var att2 = document.createAttribute("id");
                att.value = "box";
                att2.value = "box" + "-" + container + "-" + i;
                div.setAttributeNode(att);
                div.setAttributeNode(att2);
                var node = document.createElement("P");
                var t = document.createTextNode(placesLayer.features[i].properties.City_Names);
                node.appendChild(t);
                var node2 = document.createElement("P");
                var t2 = document.createTextNode("Longitude: " + placesLayer.features[i].properties.x_longitude );
                node2.appendChild(t2);
                var node3 = document.createElement("P");
                var t3 = document.createTextNode("Latitude: "+ placesLayer.features[i].properties.y_latitude);
                node3.appendChild(t3);
                div.appendChild(node);
                div.appendChild(node2);
                div.appendChild(node3);
                element.appendChild(div);
                var elementbox = document.getElementById("box" + "-" + container + "-" + i);
                elementbox.style.width = ((window.innerWidth - 110) / 5) - 40 + "px";
            }
            var size = (((window.innerWidth - 110) / 5)) * (placesLayer.features.length);
            element.style.width = size + "px";
        }
        else if (container == 2) {
            for (var i in RuskinLayer) {
                var div = document.createElement("div");
                var att = document.createAttribute("class");
                var att2 = document.createAttribute("id");
                att.value = "box";
                att2.value = "box" + "-" + container + "-" + i;
                div.setAttributeNode(att);
                div.setAttributeNode(att2);
                var node = document.createElement("P");
                var t = document.createTextNode(RuskinLayer[i].place_name);
                node.appendChild(t);
                var node2 = document.createElement("P");
                var t2 = document.createTextNode("Continent: " + RuskinLayer[i].continent);
                node2.appendChild(t2);
                var node3 = document.createElement("P");
                var t3 = document.createTextNode("Description: " + RuskinLayer[i].description);
                node3.appendChild(t3);
                div.appendChild(node);
                div.appendChild(node2);
                div.appendChild(node3);
                element.appendChild(div);
                var elementbox = document.getElementById("box" + "-" + container + "-" + i);
                elementbox.style.width = ((window.innerWidth - 110) / 5) - 40 + "px";
            }
            var size = (((window.innerWidth - 110) / 5)) * (RuskinLayer.length);
            element.style.width = size + "px";
        }
        else if (container == 3) {
            for (var i in PlaceHolderLayer) {
                var div = document.createElement("div");
                var att = document.createAttribute("class");
                var att2 = document.createAttribute("id");
                att.value = "box";
                att2.value = "box" + "-" + container + "-" + i;
                div.setAttributeNode(att);
                div.setAttributeNode(att2);
                var node = document.createElement("P");
                var t = document.createTextNode(PlaceHolderLayer[i].type);
                node.appendChild(t);
                var node2 = document.createElement("P");
                var t2 = document.createTextNode("Location: " + PlaceHolderLayer[i].place);
                node2.appendChild(t2);
                var node3 = document.createElement("P");
                var t3 = document.createTextNode("Time: " + PlaceHolderLayer[i].time);
                node3.appendChild(t3);
                div.appendChild(node);
                div.appendChild(node2);
                div.appendChild(node3);
                element.appendChild(div);
                var elementbox = document.getElementById("box" + "-" + container + "-" + i);
                elementbox.style.width = ((window.innerWidth - 110) / 5) - 40 + "px";
            }
            var size = (((window.innerWidth - 110) / 5)) * (PlaceHolderLayer.length);
            element.style.width = size + "px";
        }
    }
}
function createPopup(boxId){
    var div = document.createElement("div");
    var att = document.createAttribute("id");
    att.value = "popup";
    div.setAttributeNode(att);
    var node, node2, node3, node4, node5, node6, node7, node8, node9, node10, node11, node12, node13, node14;
    var t, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12, t13, t14;
    var temp = boxId.split("-");
    console.log(temp[1] + temp[2]);
    if (temp[1] == 1){
        node = document.createElement("P");
        t = document.createTextNode("City name : "+ placesLayer.features[temp[2]].properties.City_Names);
        node.appendChild(t);

        node2 = document.createElement("P");
        t2 = document.createTextNode("Longitude: "+ placesLayer.features[temp[2]].properties.x_longitude);
        node2.appendChild(t2);

        node3 = document.createElement("P");
        t3 = document.createTextNode("Latitude: "+ placesLayer.features[temp[2]].properties.y_latitude);
        node3.appendChild(t3);

        div.appendChild(node);
        div.appendChild(node2);
        div.appendChild(node3);
    }
    else if(temp[1] == 2){
        node = document.createElement("P");
        t = document.createTextNode("place_id: "+ RuskinLayer[temp[2]].place_id);
        node.appendChild(t);

        node2 = document.createElement("P");
        t2 = document.createTextNode("place_type: "+ RuskinLayer[temp[2]].place_type);
        node2.appendChild(t2);

        node3 = document.createElement("P");
        t3 = document.createTextNode("place_name: "+ RuskinLayer[temp[2]].place_name);
        node3.appendChild(t3);

        node4 = document.createElement("P");
        t4 = document.createTextNode("continent: "+ RuskinLayer[temp[2]].continent);
        node4.appendChild(t4);

        node5 = document.createElement("P");
        t5 = document.createTextNode("country: "+ RuskinLayer[temp[2]].country);
        node5.appendChild(t5);

        node6 = document.createElement("P");
        t6 = document.createTextNode("canton: "+ RuskinLayer[temp[2]].canton);
        node6.appendChild(t6);

        node7 = document.createElement("P");
        t7 = document.createTextNode("county: "+ RuskinLayer[temp[2]].county);
        node7.appendChild(t7);

        node8 = document.createElement("P");
        t8 = document.createTextNode("department: "+ RuskinLayer[temp[2]].department);
        node8.appendChild(t8);

        node9 = document.createElement("P");
        t9 = document.createTextNode("province: "+ RuskinLayer[temp[2]].province);
        node9.appendChild(t9);

        node10 = document.createElement("P");
        t10 = document.createTextNode("state: "+ RuskinLayer[temp[2]].state);
        node10.appendChild(t10);

        node11 = document.createElement("P");
        t11 = document.createTextNode("latitude: "+ RuskinLayer[temp[2]].latitude);
        node11.appendChild(t11);

        node12 = document.createElement("P");
        t12 = document.createTextNode("longitude: "+ RuskinLayer[temp[2]].longitude);
        node12.appendChild(t12);

        node13 = document.createElement("P");
        t13 = document.createTextNode("description: "+ RuskinLayer[temp[2]].description);
        node13.appendChild(t13);

        node14 = document.createElement("P");
        t14 = document.createTextNode("place_note: "+ RuskinLayer[temp[2]].place_note);
        node14.appendChild(t14);

        div.appendChild(node);
        div.appendChild(node2);
        div.appendChild(node3);
        div.appendChild(node4);
        div.appendChild(node5);
        div.appendChild(node6);
        div.appendChild(node7);
        div.appendChild(node8);
        div.appendChild(node9);
        div.appendChild(node10);
        div.appendChild(node11);
        div.appendChild(node12);
        div.appendChild(node13);
        div.appendChild(node14);

    }
    else if(temp[1] == 3){
        node = document.createElement("P");
        t = document.createTextNode("Place: "+ PlaceHolderLayer[temp[2]].place);
        node.appendChild(t);

        node2 = document.createElement("P");
        t2 = document.createTextNode("Duration: "+ PlaceHolderLayer[temp[2]].dmin);
        node2.appendChild(t2);

        node3 = document.createElement("P");
        t3 = document.createTextNode("Magnitude: "+ PlaceHolderLayer[temp[2]].mag);
        node3.appendChild(t3);

        node4 = document.createElement("P");
        t4 = document.createTextNode("Latitude: "+ PlaceHolderLayer[temp[2]].latitude);
        node4.appendChild(t4);

        node5 = document.createElement("P");
        t5 = document.createTextNode("Longitude: "+ PlaceHolderLayer[temp[2]].longitude);
        node5.appendChild(t5);

        div.appendChild(node);
        div.appendChild(node2);
        div.appendChild(node3);
        div.appendChild(node4);
        div.appendChild(node5);
    }
    var element = document.body;
    element.appendChild(div);
    var close = document.createElement("img");
    var att2 = document.createAttribute("id");
    att2.value = "close";
    close.setAttributeNode(att2);
    close.setAttribute("src", "resources/white_x_close.png");
    var popUp = document.getElementById("popup");
    popUp.appendChild(close);
    close.onclick = function(){closePopup()};
}
function closePopup(){
    var rem = document.getElementById("popup");
    document.body.removeChild(rem);
}
function getVisibleContainer(){
    if(document.getElementById("container1").style.display.valueOf().toString() == "block"){
        return "container1";
    }else if(document.getElementById("container2").style.display.valueOf().toString() == "block"){
        return "container2";
    }else{
        return "container3";
    }
}
function setVisibleContainer(num) {
    switch (num) {
        case(1):
            $("#container1").show();
            $("#container2").hide();
            $("#container3").hide();
            $("#timebutton1").css({"background":"#3B5786","border-bottom-color":"#3B5786"});
            $("#timebutton2").css({"background":"#2f456a","border-bottom-color":"#2f456a"});
            $("#timebutton3").css({"background":"#2f456a","border-bottom-color":"#2f456a"});
            break;
        case(2):
            $("#container2").show();
            $("#container1").hide();
            $("#container3").hide();
            $("#timebutton2").css({"background":"#3B5786","border-bottom-color":"#3B5786"});
            $("#timebutton1").css({"background":"#2f456a","border-bottom-color":"#2f456a"});
            $("#timebutton3").css({"background":"#2f456a","border-bottom-color":"#2f456a"});
            break;
        case(3):
            $("#container3").show();
            $("#container1").hide();
            $("#container2").hide();
            $("#timebutton3").css({"background":"#3B5786","border-bottom-color":"#3B5786"});
            $("#timebutton1").css({"background":"#2f456a","border-bottom-color":"#2f456a"});
            $("#timebutton2").css({"background":"#2f456a","border-bottom-color":"#2f456a"});
            break;
    }
}