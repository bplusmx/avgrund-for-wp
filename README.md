# Avgrund for WordPress

WordPress Plugin based on Avgrund jQuery Plugin.

Avgrund is a jQuery plugin for your modal boxes and popups. It uses new concept showing depth between popup and page.
It works in all modern browsers and gracefully degrade in those that do not support CSS transitions and transformations.

Documentation of Avgrund jQuery Plugin and examples are here: http://labs.voronianski.com/jquery.avgrund.js/

Based on https://github.com/voronianski/jquery.avgrund.js

## Usage

1.- Upload and install on your plugins folder. 
2.- On plugins screen click on activate.

You're also able to use some of the options that let you customize it as you wish.

```javascript
$('element').avgrund({			
	width: 380, // max is 640px
	height: 280, // max is 350px
	showClose: false, // switch to 'true' for enabling close button 
	showCloseText: '', // type your text for close button
	closeByEscape: true, // enables closing popup by 'Esc'..
	closeByDocument: true, // ..and by clicking document itself
	holderClass: '', // lets you name custom class for popin holder..
	overlayClass: '', // ..and overlay block
	enableStackAnimation: false, // enables different type of popin's animation
	onBlurContainer: '', // enables blur filter for specified block
	openOnEvent: true, // set to 'false' to init on load
	setEvent: 'click', // use your event like 'mouseover', 'touchmove', etc.
	onLoad: function () { ... }, // set custom call before popin is inited..
	onUnload: function () { ... }, // ..and after it was closed
	template: 'Your content goes here..' // or function() { ... } 
});
```

**enjoy!**