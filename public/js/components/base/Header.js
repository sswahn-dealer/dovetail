/**
 * Header Component
 *
 */
const HeaderComponent = () => {
    const childProps = 'Test Component Title';
    return [
        {'header': {'class': 'panel-heading'}},
        ...HeadingComponent(childProps)
    ];
};         

const HeadingComponent = props => {
    return [
        {'h1': {'class': 'lead', 'content': props}} 
    ];
};
