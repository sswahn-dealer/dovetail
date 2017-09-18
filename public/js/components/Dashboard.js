/**
 * Dashboard Component
 *
 */
const DashboardComponent = () => {
    const childProps = 'data';
    return [
        {'div': {'id': 'main-body', 'class': 'panel-body'}},
        ...DataComponent(childProps)
    ];
};

const DataComponent = props => {
    return [
        {'p': {'content': props}}
    ];
};

Core.render(
    DashboardComponent(),
    document.getElementById('base-body')
);
