import React, {Component} from "react";
import ReactDOM from "react-dom";
import './HomeWor.css';




class HomeWork extends Component {
    constructor(props) {
        super(props);
        this.state = {
            task2: 'Please click button Task2',
            //task3 - count
            count: 0,
            //task5
            task5: '',
            task7: 'Введите текст в поле ввода'


        }
        this.showTask1 = this.showTask1.bind(this);
        this.showTask2 = this.showTask2.bind(this);
        this.countTask3 = this.countTask3.bind(this);
        this.countReset = this.countReset.bind(this);
        this.task7InputText = this.task7InputText.bind(this);

    }

    render() {

        return (
            <div className="HomeWork">
                <h2>Hello</h2>
                <button onClick={this.showTask1}>Task 1</button>
                <button onClick={this.showTask2}>Task 2</button>
                <button onClick={this.countTask3}>Task 3 Count</button>
                {/* Task 4*/}
                <button onClick={this.countReset}>Reset Count</button>

                <p>{ this.state.task2}</p>
                <p>{ this.state.count}</p>
                <div className="green-div-class" onMouseMove={this.moveTask5}>{this.state.task5}</div>

                <button onClick={this.task6} data="atr-1">art1</button>
                <button onClick={this.task6} data="atr-2">art2</button>
                <div className="task-7">
                    <h4>Task 8</h4>
                    <p>{ this.state.task7 }</p>
                    <input type="text" onInput={this.task7InputText}/>

                </div>

            </div>


        );
    }

    task7InputText(e) {
        this.setState({task7: e.target.value})



    }

    moveTask5() {
        console.log(
            'move'
        )
    }

    showTask1() {
        console.log('button work')
    }

    showTask2() {
        this.setState({task2: 'button work'})
    }

    countTask3() {
        this.setState({count: this.state.count + 1})
    }
    countReset(){
        this.setState({count: 0})
    }

    task6(e) {
        console.log(e.target.attributes.getNamedItem('data').value)
    }
}

export default HomeWork;

if (document.getElementById('home-work')) {
    ReactDOM.render(<HomeWork />, document.getElementById('home-work'));
}
