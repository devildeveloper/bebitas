CKEDITOR.plugins.add( 'multimedia', {
    icons: 'icons/multimedia.png',
    init: function( editor ) {
        // Plugin logic goes here...
        editor.addCommand( 'multimedia', new CKEDITOR.dialogCommand( 'multimedia' ) );
        editor.ui.addButton( 'Multimedia', {
            label: 'Insert Abbreviation',
            command: 'abbrDialog',
            toolbar: 'insert'
        });
    }
});