import React from 'react'

const Bienvenido = (props) => {

    const handleClickButton = () => {
        alert('Bienvenidos Hijos de su madre')
    }

    return (
        <div className="rounded-circle bg-danger">
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <a href="#" onClick={handleClickButton}>
                    <h1 className="text-white">Welcome</h1>
                </a>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
        </div>
    )
}

export default Bienvenido
