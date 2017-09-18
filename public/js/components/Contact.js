/**
 * Contact Component
 *
 */
 
 
var props = {
    form: {
        'class': 'panel-body',
        'id': 'contact-form',
        'action': '/contact/send',
        'method': 'get',
        'enctype': 'multipart/form-data',
        'onsubmit': 'return sendMessage()'
    },
    send: {
        'type': 'submit',
        'class': 'icon-btn pulled-btn btn btn-info pull-right',
        'id': 'send-btn',
        'data': 'Send'
    },
    subject: {
        'type': 'text',
        'class': 'form-control',
        'id': 'subject',
        'name': 'subject',
        'placeholder': 'Subject',
        'required': 'required'
    },
    message: {
        'class': 'form-control',
        'id': 'body',
        'name': 'body',
        'rows': '6',
        'placeholder': 'Message',
        'required': 'required'
    },
    cc: {
        'type': 'text', 
        'class': 'form-control',
        'id': 'carbon-copy',
        'name': 'carbon_copy',
        'placeholder': 'Cc:'
    },
    bcc: {
        'type': 'text',
        'class': 'form-control',
        'id': 'blind-carbon-copy',
        'name': 'blind_carbon_copy',
        'placeholder': 'Bcc:'
    },
    fileupload: {
        'type': 'file',
        'class': 'form-control-file',
        'id': 'file',
        'name': 'file'
    }
};
 
const ContactComponent = props => {
    const childProps = props;
    return [
        {'form': {...props.form}},
        ...ArticleComponent(),
        ...HeaderComponent(),
        ...BodyComponent(),
        ...FooterComponent(),
        ...SubmitButtonComponent(childProps.send),
        ...InputComponent(childProps.subject),
        ...TextAreaComponent(childProps.message),
        ...InputComponent(childProps.cc),
        ...InputComponent(childProps.bcc),
        ...InputComponent(childProps.fileupload)
        
    ];
};

const SubmitButtonComponent = props => {
    return [
        {'button': {...props}}
    ];
};

const InputComponent = props => {
    return [
        {'input': {...props}}
    ];
};

const TextAreaComponent = props => {
    return [
        {'textarea': {...props}}
    ];
};


Core.render(
    ContactComponent(props),
    document.getElementById('base-body')
);


