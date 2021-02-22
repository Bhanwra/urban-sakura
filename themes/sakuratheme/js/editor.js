wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
    style_handle: 'sakura-style'
} );

wp.domReady(() => {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
})

wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: ''
})