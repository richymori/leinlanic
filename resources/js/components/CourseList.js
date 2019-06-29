import React, { useState, useEffect } from 'react'
import Course from './Course';
import Loading from './Loading';

export default function CourseList() {
    const [loading, setLoading] = useState(true);
    const [cursos, setCursos] = useState([]);
    const cargarCursos = () => {
        axios.get('/cursos')
            .then(resp => {
                setLoading(false)
                setCursos(resp.data)
            })
            .catch(err => {
                setLoading(false)
                console.log('error al cargar los cursos')
             })
    }

    useEffect(cargarCursos, [])

    return (
        <section className="row">
            {
                loading && <Loading/>
            }
            {
                loading == false && cursos.map(item => <Course {...item} key={item.id}/>)
            }
        </section>
    )
}
