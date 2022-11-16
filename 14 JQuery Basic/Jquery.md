# JQuery

## What is jQuery?
* jQuery is a small, fast and feature-rich JavaScript library.
* jQuery makes things like DOM manipulation, even handling and Ajax MUCH easier
* Much less code

## What you should know?
* HTML
* CSS
* JavaScript

## What you will learn
* Selector
* Event Handling
* Dom Manipulation
* Methods
* AJAX

## Selectors
```javascript
$('h1').hide();
$('h1#heading1').hide();
$('.heading2').hide();
$('p span').css('color', 'red');
$('ul#list li:first').css('color', 'red');
$('ul#list li:last').css('color', 'green');
$('ul#list li:even').css('background-color', 'yellow');
$('ul#list li:odd').css('background-color', '#cccccc');
$('ul#list li:nth-child(3n)').css('list-style', 'none');
$('*').hide();
```

## Events
```javascript
$(document).ready(function(){

	$('#btn1').click(function(){
		alert('Button Clicked!');
	});
	
	$('#btn1').on('click', function(){
		alert('Button Clicked!');
	});
	
	$('#btn1').on('click', function(){
		//$('.para1').hide();
		$('.para1').toggle();
	});
	
	$('#btn2').on('click', function(){
		$('.para1').show();
	});
	
	$('#btn1').dblclick(function(){
		$('.para1').toggle();
	});
	
	$('#btn1').hover(function(){
		$('.para1').toggle();
	});
	
	$('#btn1').on('mouseenter', function(){
		$('.para1').toggle();
	});
	
	$('#btn1').on('mouseleave', function(){
		$('.para1').toggle();
	});
	
	
	$('#btn1').on('mouseup', function(){
		$('.para1').toggle();
	});
	
	$('#btn1').click(function(e){
		//alert(e.currentTarget.id);
		//alert(e.currentTarget.innerHTML);
		//alert(e.currentTarget.outerHTML);
		//alert(e.currentTarget.className);
	});
	
	$(document).on('mousemove', function(e){
		$('#coords').html('Coords: Y: '+e.clientY+" X: "+e.clientX);
	});

	$('input').focus(function(){
		//alert('Focus');
		$(this).css('background', 'pink');
	});

	$('input').blur(function(){
		//alert('Focus');
		$(this).css('background', 'white');
	});

	$('input').keyup(function(e){
		console.log(e.target.value);
	});

	$('select#gender').change(function(e){
		alert(e.target.value);
	});

	$('#form').submit(function(e){
		e.preventDefault();
		var name = $('input#name').val();
		console.log(name);
	});
});
```