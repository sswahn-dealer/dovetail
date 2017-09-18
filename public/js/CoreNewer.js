/**
 * 
 *
 */
/* Note: children can also be the data (as a string) */
const helper = (type, props, ...children) => ({ type, props, children });
/** 
 * Ex.
 *
 const list = 
     helper('ul', { className: 'list' },
        helper('li', {}, 'first item text'),
        helper('li', {}, 'second item text')
     );
     
CoreDOM.render(
    list,
    document.getElementById('root');
);

div(.someclass, 
    
);
 */
 
const CoreDOM = {
    createElement(node) {
        if (typeof node === 'string') {
            return document.createTextNode(node);
        }
        const $element = document.createElement(node.type);
        node.children
            .map(child => createElement(child)
            .forEach($element.appendChild.bind($element));
        return $element;
    },
    updateElement($parent, newNode, oldnode, index = 0) {
        if (!oldNode) {
            $parent.appendChild(
                createElement(newNode)
            );
        }
        if (!newNode) {
            $parent.removeChild(
                $parent.childNodes[index]
            );
        }
        if (changed(newNode, oldNode)) {
            $parent.replaceChild(
                createElement(newNode),
                $parent.childNodes[index]
            );
        }
        if (newNode.type) {
            const newLength = newNode.children.length;
            for (let i = 0 ; i < newLength || i < oldLength; i++) {
                updateElement(
                    $parent.childNodes[index],
                        newNode.children[i],
                        oldNode.children[i],
                        i
                );
            }
        }
    },
    changed(node1, node2) {
        return typeof node1 !== typeof node2 ||
               typeof node1 === 'string' && node1 !== node2 ||
               node1.type !== node2.type;
    },
    render(node, root) {
    
        //this.creatElement(node);
        //or this.updateElement(parent, new, old, index?);
    
    }
};
