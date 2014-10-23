//console.log( 'From copyClip.js:' );
var client = new ZeroClipboard( document.getElementById('copy-button') );

client.on( 'ready', function( readyEvent ) {
   // alert( "ZeroClipboard SWF is ready!" );

	client.on( 'copy', function(event) {
		// event.clipboardData.setData('text/plain', event.target.innerHTML);
		// var display_box_text = 'foo';
		var displayBoxText = document.getElementById('display-box').value;
		event.clipboardData.setData('text/plain', displayBoxText);
	} );

	client.on( 'aftercopy', function( event ) {
	// hide "Copy to Clipboard" button
    // event.target.style.display = "none";
    //document.write('<div><button class="btn btn-primary copy_button" id="copy-button" data-clipboard-text="Copy me!">Copied</button></div>');
    alert("Copied text to clipboard: " + event.data['text/plain'] );
	} );
} );

client.on( 'error', function(event) {
// console.log( 'ZeroClipboard error of type "' + event.name + '": ' + event.message );
ZeroClipboard.destroy();
} );