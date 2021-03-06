import React from 'react'

export default function Course(props) {

    const divStyle = {
        width: '400px'
    }
    return (
        <div className="card m-2" style={divStyle}>
            <img src={props.img ? props.img : 'imgs/148957.jpg'} className="card-img-top" alt="curso de miskito" />
            <div className="card-body">
                <h2 className="card-title">{props.name ? props.name : 'Nombre del curso'}</h2>
                <p className="card-text">{props.description ? props.description : 'Descripción del curso'}</p>
                <a href="#" className="btn btn-outline-primary">Tomar curso</a>
            </div>
        </div>
    )
}
