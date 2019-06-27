import React from 'react'

const Tarjeta = (props) => {
    return (
        <div className="card">
            <div className="card-header">{props.titulo}</div>

            <div className="card-body">{props.children}</div>
        </div>
    )
}

export default Tarjeta
