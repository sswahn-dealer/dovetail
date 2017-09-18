//login component
const Login = data => {

    const component = Core.createComponent();

    component.addElement('div')
        .withAttributes({
            'id': 'wrapper'
        });
        
    component.addElement('div')
        .appendTo('wrapper');

    component.render();
};
