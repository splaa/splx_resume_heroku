import React, {Component} from "react";
import ReactDOM from "react-dom";
import Header from "./header/Header";


class App extends Component {
    render() {

        this.props.nav;
        return (
            <div className="App">
                <Header title="SplX Site" nav={nav}/>
                <footer>
                    <h4>Footer</h4>
                </footer>
            </div>
        );
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
