import React, { Component, useState } from 'react'

class CourseForms extends Component {
    state = {
        curso: '',
        descripcion: '',
        imagen: '',
        lengua: '',
        desarrollador: ''
    }

    onChange = (e) => {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    render() {
        return (
            <div className="card mt-5 py-5">
                <div className="card-body">
                    <h2 className="card-title text-center mb-5">
                        Nuevo Curso
                    </h2>
                    <form>
                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                                Nombre del curso
                            </label>
                            <div className="col-sm-8 col-lg-10">
                                <input
                                    onChange={this.onChange}
                                    name="curso"
                                    type="text"
                                    className="form-control  "
                                    placeholder="Nombre del curso"
                                />
                            </div>
                        </div>
                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                                Descripción
                            </label>
                            <div className="col-sm-8 col-lg-10">
                                <input
                                    onChange={this.onChange}
                                    name="descripcion"
                                    type="text"
                                    className="form-control  "
                                    placeholder="Descripcion del curso"
                                />
                            </div>
                        </div>
                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                                Imagen
                            </label>
                            <div className="col-sm-8 col-lg-4">
                                <input
                                    onChange={this.onChange}
                                    name="imagen"
                                    type="text"
                                    className="form-control  "
                                />
                            </div>
                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                                Lengua
                            </label>
                            <div className="col-sm-8 col-lg-4">
                                <input
                                    onChange={this.onChange}
                                    name="lengua"
                                    type="text"
                                    className="form-control  "
                                />
                            </div>
                        </div>
                        <div className="form-group row">
                            <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                                Desarrollador
                            </label>
                            <div className="col-sm-8 col-lg-10">
                                <input
                                    onChange={this.onChange}
                                    name="desarrollador"
                                    className="form-control "
                                    placeholder="Desarrollador"
                                />
                            </div>
                        </div>
                        <input type="submit" className="btn btn-success btn-block py-3 mt-2" value="Guardar" />
                    </form>
                </div>
            </div>
        )
    }
}

export default function CourseForm() {
    const [curso, setCurso] = useState({})

    const onChange = (e) => {
        setCurso({
            ...curso,
            [e.target.name]: e.target.value
        })
        console.log(curso)
    }

    return (
        <div className="card mt-5 py-5">
            <div className="card-body">
                <h2 className="card-title text-center mb-5">
                    Nuevo Curso
                    </h2>
                <form>
                    <div className="form-group row">
                        <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                            Nombre del curso
                            </label>
                        <div className="col-sm-8 col-lg-10">
                            <input
                                onChange={onChange}
                                name="curso"
                                type="text"
                                className="form-control  "
                                placeholder="Nombre del curso"
                            />
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                            Descripción
                            </label>
                        <div className="col-sm-8 col-lg-10">
                            <input
                                onChange={onChange}
                                name="descripcion"
                                type="text"
                                className="form-control  "
                                placeholder="Descripcion del curso"
                            />
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                            Imagen
                            </label>
                        <div className="col-sm-8 col-lg-4">
                            <input
                                onChange={onChange}
                                name="imagen"
                                type="text"
                                className="form-control  "
                            />
                        </div>
                        <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                            Lengua
                            </label>
                        <div className="col-sm-8 col-lg-4">
                            <input
                                onChange={onChange}
                                name="lengua"
                                type="text"
                                className="form-control  "
                            />
                        </div>
                    </div>
                    <div className="form-group row">
                        <label htmlFor="" className="col-sm-4 col-lg-2 col-form-label">
                            Desarrollador
                            </label>
                        <div className="col-sm-8 col-lg-10">
                            <input
                                onChange={onChange}
                                name="desarrollador"
                                className="form-control "
                                placeholder="Desarrollador"
                            />
                        </div>
                    </div>
                    <input type="submit" className="btn btn-success btn-block py-3 mt-2" value="Guardar" />
                </form>
            </div>
        </div>
    )
}
