//console.log( 'From copy_clip.js:' );

var copyButton = document.getElementById('copy-button');
var client = new ZeroClipboard(copyButton);

client.on( 'ready', function(readyEvent) {
   // alert( "ZeroClipboard SWF is ready!" );

	client.on( 'copy', function(event) {
		var clipText = document.getElementById('clipboard-text').value;
		event.clipboardData.setData('text/plain', clipText);
	} );

	client.on( 'aftercopy', function(event) {
    // event.target.style.display = "none";
    // alert("Copied text to clipboard: " + event.data['text/plain'] );
    // change text on button once text clipped
    event.target.value = "Text Copied";
	} );
} );

client.on( 'error', function(event) {
// console.log( 'ZeroClipboard error of type "' + event.name + '": ' + event.message );
ZeroClipboard.destroy();
} );