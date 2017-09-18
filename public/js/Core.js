const Core = {
    component: null,
    fragment: document.createDocumentFragment(),
    render(objects, DOMelement) {
        this.component = this.setElement(objects[0]);
        objects.forEach(object => {
            if (object === objects[0]) return;
            let element = this.setElement(object);
            this.component.appendChild(element);
        });
        this.fragment.appendChild(this.component);
        DOMelement.appendChild(this.fragment);//append to DOM elsewhere
    },
    setElement(objects) {
        let element = null;
        for (let key in objects) {
            let elementType = Object.keys(objects);
            element = document.createElement(...elementType);
            let attributes = objects[elementType];
            this.setAttributes(element, attributes);
            this.setContent(element, objects[key]);
        }
        return element;
    },
    setAttributes(element, attributes) {
        for (let key in attributes) {
            element.setAttribute(key, attributes[key]);
        }
    },
    setContent(element, object) {
        if (!element.hasAttribute('content')) return;
        let textNode = document.createTextNode(object.content);
        element.appendChild(textNode);
        element.removeAttribute('content');
    }
};
