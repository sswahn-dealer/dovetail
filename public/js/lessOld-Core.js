const Core = {
    
    createComponent(component = {}) {
        return {
            currentComponent: null,
            create(parent, ...children) {
                const parentType = Object.keys(parent);
                this.currentComponent = document.createElement(...parentType);
                const parentKey = this.currentComponent.tagName.toLowerCase();
                const parentAttributes = parent[parentKey];
                for (let key in parentAttributes) {
                    this.currentComponent.setAttribute(key, parentAttributes[key]);
                }
                children.forEach(child => {
                    if (!child) return;
                    let objects = Object.assign({}, ...child.render());
                    for (let key in objects) {
                        let elementType = Object.keys(objects);
                        let element = document.createElement(...elementType);
                        let attributes = objects[elementType];
                        for (let key in attributes) {
                            element.setAttribute(key, attributes[key]);
                        }
                        if (element.hasAttribute('data')) {
                            let textNode = document.createTextNode(objects[key].data);
                            element.appendChild(textNode);
                            element.removeAttribute('data');
                        }
                        this.currentComponent.appendChild(element);
                    }
                });
            },
            render(component, element) {            
                fetch('/api/v1' + location.pathname)
                    .then(response => response.json())
                    .then(data => {
                        component.render(data);
                        
                        //need status check for .remove()
                        const fragment = document.createDocumentFragment();
                        fragment.appendChild(this.currentComponent);
                        console.log(element);
                        element.appendChild(fragment);
                    })
                    .catch(console.log);
            }
        };
    }
};
const Component = Core.createComponent();
