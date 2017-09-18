/**
 * Modal Component
 *
 */

 
const ModalComponent = (props) => {
    childProps = props;
    return [
        {'div': {'class':'modal fade', 'id': 'components-modal', 'role': 'dialog'}},
        ...ModalDialogComponent();
    ];
};

const ModalDialogComponent = (props) => {
    childProps = props;
    return [
        {'div': {'class':'modal-dialog white-bg'}},
        ...ModalHeaderComponent(),
        ...ModalBodyComponent(),
        ...ModalFooterComponent()
    ];
};

const ModalHeaderComponent = (props) => {
    childProps = props;
    return [
        {'div': {'class':'modal-header'}},
        ...ButtonComponent(),
        ...HeadingComponent()
    ];
};

const ButtonComponent = (props) => {
    return [
        {'button': {'class':'close', 'data-dismiss': 'modal', 'content': '&times;'}}
    ];
};

const HeadingComponent = (props) => {
    return [
        {'h4': {'class':'modal-title', 'content': 'Choose Dashboard Components'}}
    ];
};

const ModalBodyComponent = (props) => {
    return [
        {'div': {'class':'modal-body'}}
    ];
};

const ModalFooterComponent = (props) => {
    const childProps = props;
    return [
        {'div': {'class':'modal-footer'}},
        ...ButtonComponent()
    ];
};

Core.render(
    ModalComponent(),
    document.getElementById('subheader')
);

const initialProps = [
    {
        'idx': 0,
        'class': 'modal fade',
        'id': 'components-modal',
        'role': 'dialog'
    },
    {
        'idx': 1,
        'class': 'modal-dialog white-bg'
    },
    {
        'idx': 2,
        'class': 'modal-header'
    },
    {
        'idx': 3,
        'type': 'button',
        'class': 'close',
        'data-dismiss': 'modal',
        'content': '&times;'
    },
    {
        'idx': 4,
        'class': 'modal-title',
        'content': 'Choose Dashboard Components'
    },
    {
        'idx': 5,
        'class': 'modal-body'
    },
    {
        'idx': 6,
        'class': 'modal-footer'
    },
    {
        'idx': 7,
        'type': 'button',
        'class': 'btn btn-default',
        'data-dismiss': 'modal',
        'content': 'Close'
    }
];
/*
    <div class="modal fade" id="components-modal" role="dialog">
        <div class="modal-dialog white-bg">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Choose Your Dashboard Components</h4>
            </div>
            <div class="modal-body">
                <p>Business...</p>
                <p>Business.</p>
                <p>Numbers...</p>
                <p>Business.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
*/ 
    
