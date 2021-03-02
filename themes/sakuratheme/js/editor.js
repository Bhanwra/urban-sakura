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

wp.blocks.registerBlockStyle('core/columns', {
    name: "no-gutter",
    label: "No Gutter",
    style_handle: "no-gutter-style"
});

wp.blocks.registerBlockStyle('core/cover', {
    name: "feature-cover",
    label: "Feature Cover",
    style_handle: "feature-cover-style"
});

wp.blocks.registerBlockStyle('woocommerce/featured-product', {
    name: "best-seller",
    label: "Best Seller",
    style_handle: "best-seller-product"
});

wp.blocks.registerBlockStyle('core/image', {
    name: "best-seller",
    label: "Best Seller",
    style_handle: "best-seller-image"
});