import React from 'react';
import ReactDOM from 'react-dom';
import { HashRouter, Route, Switch } from "react-router-dom";
import CourseList from './CourseList';
import NotFound from './NotFound'
import SingleCourse from './SingleCourse';
import CourseForm from './CourseForm';

const App = () => {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <CourseList />
            </div>
        </div>
    )
}

const Root = () => (
    <HashRouter>
        <Switch>
            <Route path="/" exact component={App} />
            <Route path="/curso/create" exact component={CourseForm} />
            <Route path="/curso/:id" exact component={SingleCourse} />
            <Route component={NotFound}/>
        </Switch>
    </HashRouter>
  );

if (document.getElementById('app')) {
    ReactDOM.render(<Root />, document.getElementById('app'));
}
