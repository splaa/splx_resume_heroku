import React, {Component} from "react";



class Lesson10 extends Component{
    constructor(props) {
        super(props);
        this.state = {
            text: 'Hello',
            text2: 555,
        };
        this.myInput = this.myInput.bind(this);
    }

    render() {
        return (
            <div>
                <h6>Lesson10</h6>
               <p>{this.state.text}</p>
                <form action="">
                    <input type="text" onChange={this.myInput}/>
                </form>
            </div>
        );
    }

    myInput(e){
        console.log(e.target.value);
        this.setState({text: e.target.value})
    }

}

export default Lesson10;
