function addContainerAttribute(settings, name) {
	if (typeof settings.attributes !== 'undefined') {
		if (name == 'core/columns') {
			settings.attributes = Object.assign({}, settings.attributes, {
				isContained: {
					type: 'boolean'
				}
			});
		}
	}
	return settings;
}

 
wp.hooks.addFilter(
	'blocks.registerBlockType',
	'awp/columns-custom-attribute',
	addContainerAttribute
);

const columnsAdvancedControls = wp.compose.createHigherOrderComponent((BlockEdit) => {
	return (props) => {
		const { Fragment } = wp.element;
		const { ToggleControl, PanelBody, PanelRow } = wp.components;
		const { InspectorControls } = wp.blockEditor;
		const { attributes, setAttributes, isSelected } = props;
		if (attributes.isContained === undefined) {
			setAttributes({ isContained: true });
		}
		return (
			<Fragment>
				<BlockEdit {...props} />
				{isSelected && (props.name == 'core/columns') && 
					<InspectorControls>
						<PanelBody title="Layout" initialOpen={ true }>
							<PanelRow>
								<ToggleControl
									label={wp.i18n.__('Contain Content', 'awp')}
									checked={!!attributes.isContained}
									onChange={(newval) => setAttributes({ isContained: !attributes.isContained })}
								/>
							</PanelRow>
						</PanelBody>
					</InspectorControls>
				}
			</Fragment>
		);
	};
}, 'columnsAdvancedControls');
 
wp.hooks.addFilter(
	'editor.BlockEdit',
	'awp/columns-advanced-control',
	columnsAdvancedControls
);

const withYourCustomBlockClass = wp.compose.createHigherOrderComponent( ( BlockListBlock ) => {
	return ( props ) => {
			const { name, attributes } = props;

			if ( name != 'core/columns' ) {
					return <BlockListBlock { ...props }/>;
			}

			const { isContained } = attributes;
			const customClass = isContained ? 'container' : '';

			return <BlockListBlock { ...props } className={ customClass } />;
	};
}, 'withYourCustomBlockClass' );

wp.hooks.addFilter(
'editor.BlockListBlock',
'your-plugin/your-custom-class',
withYourCustomBlockClass
);