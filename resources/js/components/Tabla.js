import React from 'react'

import TableItem from './TableItem'

const Tabla = () => {
    return (
        <div className="table-respponsive">
            <table className="table table-striped table-inverse">
                <thead className="thead-inverse">
                    <tr>
                        <th>Encabezado 1</th>
                        <th>Encabezado 2</th>
                        <th>Encabezado 3</th>
                    </tr>
                </thead>
                <tbody>
                    {
                        [1,2,3,4,5].map(item => {
                            return <TableItem key={item}/>
                        })
                    }
                </tbody>
            </table>
        </div>
    )
}

export default Tabla
