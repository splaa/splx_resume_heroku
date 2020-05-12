import React, {Component} from "react";
import ReactDOM from "react-dom";
import Lesson10 from "./lessons/Lesson10";



class Lessons extends Component {

    render() {
        return (
            <div>
                <h1>Lessons</h1>
                <Lesson10/>
            </div>
        );
    }


}

export default Lessons;


if (document.getElementById('lesson9')) {
    ReactDOM.render(<Lessons />, document.getElementById('lesson9'));
}
