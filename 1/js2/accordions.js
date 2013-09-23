var accordion;
var accordionTogglers;
var accordionContents;

var accordion_x;
var accordionTogglers_x;
var accordionContents_x;

window.onload = function() {
	accordionTogglers = document.getElementsByClassName('accToggler');
	accordionTogglers.each(function(toggler){
		//remember the original color
		toggler.origColor = toggler.getStyle('background-color');
		//set the effect
		toggler.fx = new Fx.Color(toggler, 'background-color');
	});
	accordionContents = document.getElementsByClassName('accContent');	
	accordion = new Fx.Accordion(accordionTogglers, accordionContents,{
		//when an element is opened change the background color to blue
		onActive: function(toggler){
			toggler.fx.toColor('#6899CE');
		},
		onBackground: function(toggler){
			//change the background color to the original (green) 
			//color when another toggler is pressed
			toggler.setStyle('background-color', toggler.origColor);
		}		
	});

	accordionTogglers_x = document.getElementsByClassName('accToggler_x');
	accordionTogglers_x.each(function(toggler){
		//remember the original color
		toggler.origColor = toggler.getStyle('background-color');
		//set the effect
		toggler.fx = new Fx.Color(toggler, 'background-color');
	});
	accordionContents_x = document.getElementsByClassName('accContent_x');	
	accordion_x = new Fx.Accordion(accordionTogglers_x, accordionContents_x,{
		//when an element is opened change the background color to blue
		onActive: function(toggler){
			toggler.fx.toColor('#6899CE');
		},
		onBackground: function(toggler){
			//change the background color to the original (green) 
			//color when another toggler is pressed
			toggler.setStyle('background-color', toggler.origColor);
		}		
	});
}