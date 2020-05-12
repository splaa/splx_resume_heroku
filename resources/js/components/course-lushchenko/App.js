import React, {Component} from "react";
import ReactDOM from "react-dom";
import Header from "./header/Header";



class App extends Component {
    constructor(props) {

        super(props);
        //Initialize the state in the constructor
        this.state = {
            products: ['апельсины', 'яблоки'],
            show: "Show Main Menu"
        }
        this.showMenu = this.showMenu.bind(this);
    }
    render() {

        return (
            <div className="App">
                <Header title="SplX Site" nav={nav}/>
                <main>
                    <h2>{this.state.show}</h2>
                    <button type="button" onClick={this.showMenu}>{this.state.show}</button>

                    <ul>
                        { this.renderProducts() }
                    </ul>
                </main>
                <footer>
                    <h4>Footer</h4>
                </footer>
            </div>
        );
    }
    showMenu(){
        // console.log('work');
        console.log(this);
        this.setState({ show: "Hide Menu " })
    }

    renderProducts() {
        return this.state.products.map(product => {
            return (
                /* При использовании <li> необходимо указать key=""
                 * атрибут,должен быть уникальный для каждого элемента списка
                */
                <li key={product} >
                    { product }
                </li>
            );
        });
    }
}

export default App;
let nav = {
    main: '/index',
    about: '/about',
    price: '/buy/price',
};

if (document.getElementById('course-lushchenko')) {
    ReactDOM.render(<App nav={nav}/>, document.getElementById('course-lushchenko'));
}
