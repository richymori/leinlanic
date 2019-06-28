import React from 'react'

import TableItem from './TableItem'

const Tabla = () => {
    return (
        <div className="table-respponsive">
            <table className="table table-striped table-inverse">
                <thead className="thead-inverse">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th><span className="fa fa-cog"></span></th>
                    </tr>
                </thead>
                <tbody>
                    {
                        [1,2,3,4,5].map(item => {
                            return <TableItem key={item} id={item}/>
                        })
                    }
                </tbody>
            </table>
        </div>
    )
}

export default Tabla
