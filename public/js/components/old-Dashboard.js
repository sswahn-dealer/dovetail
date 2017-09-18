/**
 * Dashboard Component
 *
 */
//import Component from 'Component';

/*export default*/ class Dashboard //extends Component
{
   /*constructor() {
        super();
        
    }*/

    buildComponent() 
    {
        return fetch('/api/v1/dashboard')
            .then(response => response.json())
            .then(this.templateComponent)
            .catch(console.log);
    }

    templateComponent(data) 
    {    
        const template = Core.createTemplate();

        template.addElement('article')
            .withAttributes({
                'class': 'component panel panel-default white-bg',
                'id': 'dashboard-component'
            });
            
        template.addElement('header')
            .withAttributes({
                'class': 'panel-heading',
                'id': 'dashboard-header'
            })
            .appendTo('dashboard-component');

        template.addElement('h1')
            .withAttributes({
                'class': 'lead'
            })
            .withContent(data.title)
            .appendTo('dashboard-header');
            
        template.addElement('div')
            .withAttributes({
                'class': 'panel-body',
                'id': 'dashboard-main'
            })
            .appendTo('dashboard-component');
            
        template.addElement('span', 'One off.')
            .appendTo('dashboard-main');

        Object.keys(data.values).forEach(key =>
            template.addElement('p')
                .withAttributes({'class': 'Boribmir'})
                .withContent(data.values[key])
                .appendTo('dashboard-main')
        );

        template.addElement('button')
            .withAttributes({'onclick': 'dashboard.sendAlert()'})
            .withContent('Submit')
            .appendTo('dashboard-main');
            
        template.addElement('footer')
            .withAttributes({'class': 'panel-footer'})
            .appendTo('dashboard-component');

        template.render();   
    }
    
    sendAlert() 
    {
        alert('this is test');
    }
}
