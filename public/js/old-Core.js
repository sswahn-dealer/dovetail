const Core = {
    createTemplate() {
        const fragment = document.createDocumentFragment();z

        return {
            currentElement: null,
            addElement(element, content = null) {
                this.currentElement = document.createElement(element);
                if (content) {
                    let c = document.createTextNode(content);
                    this.currentElement.appendChild(c);
                }
                fragment.appendChild(this.currentElement);
                return this;
            },
            withAttributes(attributes) {
                let e = fragment.lastElementChild;
                for (let key in attributes) {
                    e.setAttribute(key, attributes[key]);
                }
                return this;
            },
            withContent(content) {
                let e = fragment.lastElementChild;
                let c = document.createTextNode(content);
                e.appendChild(c);
                return this;
            },
            appendTo(parent) {
                let p = fragment.getElementById(parent);
                let e = fragment.lastElementChild;
                fragment.removeChild(e);
                p.appendChild(e);
            },
            render(element = 'root') {
                if (!fragment.hasChildNodes()) return;
                document.getElementById(element).prepend(fragment);
            }
        };
    }
};
