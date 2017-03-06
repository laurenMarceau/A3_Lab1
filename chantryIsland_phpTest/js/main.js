// JavaScript Document

(function() {
	"use strict";


//Mobile nav drop down
var mobileNav = document.querySelector("#navigationButton");
var dropdown = document.querySelector("#dropDown");

function dropDown() {
		dropdown.classList.toggle("hidden");
}

mobileNav.addEventListener('click', dropDown, "false");

//desktop about drop down

var link =document.querySelector("#aboutLink");
var AboutDropDown = document.querySelector("#aboutDropDown");

function aboutDropDown() {
	AboutDropDown.classList.add("visible");
}

function dropDownClose() {
	AboutDropDown.classList.remove("visible");
}

link.addEventListener('mouseover', aboutDropDown, "false");
link.addEventListener('mouseout', dropDownClose, "false");

})();
