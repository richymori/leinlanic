import React from 'react';
import ReactDOM from 'react-dom';
import Tarjeta from './Tarjeta'
import Tabla from './Tabla';
import Course from './Course';

const App = () => {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <br></br>
                <br></br>
                <br></br>
                <div className="col-md-8">
                    <Tarjeta titulo={'TARJETA DE EJEMPLO #1'}>
                        <Tabla />
                    </Tarjeta>
                </div>
                <Course
                    name="Curso de miskito"
                    img="imgs/148957.jpg"
                    description="Con este curso aprenderás miskito"
                />
                <Course
                    name="Curso de Mayangna"
                    img="imgs/siuna.jpg"
                    description="Con este curso aprenderás mayangna"
                />
                <Course
                    name="Curso de garifuna"
                    img="imgs/garifuna.jpg"
                    description="Con este curso aprenderás garifuna"
                />
                <Course
                    name="Curso de creole"
                    img="imgs/blf.jpg"
                    description="Con este curso aprenderás creole"
                />
            </div>
        </div>
    )
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
