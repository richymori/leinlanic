import React from 'react'

const TableItem = (props) => {

    const handleClickDetails = () => {
        alert('Detalles elemento #: ' + props.id)
    }

    const handleClickEdit = () => {
        alert('Editar elemento #: ' + props.id)
    }

    const handleClickDelete = () => {
        alert('Eliminar elemento #: ' + props.id)
    }

    return (
        <tr>
            <td>row item col 1</td>
            <td>row item col 2</td>
            <td>row item col 3</td>
            <td>
                <div className="btn-group" role="group" aria-label="">
                    <button onClick={handleClickDetails} type="button" className="btn btn-primary"><span className="fa fa-eye"></span></button>
                    <button onClick={handleClickEdit} type="button" className="btn btn-primary"><span className="fa fa-pencil"></span></button>
                    <button onClick={handleClickDelete} type="button" className="btn btn-danger"><span className="fa fa-trash"></span></button>
                </div>
            </td>
        </tr>
    )
}

export default TableItem
