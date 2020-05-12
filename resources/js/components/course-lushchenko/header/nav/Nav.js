import React, {Component} from "react";
import ReactDOM from "react-dom";


class Nav extends Component {

    constructor(props) {
        super(props);
        this.state = {
            title: "Navigation",
            subtitle: 'Main menu',
            show: "show",
            text2: "text start"
        }
        this.showNav = this.showNav.bind(this);
        this.showText2 = this.showText2.bind(this);

    }


   showNav (){
        console.log('hi');
        this.setState({show: "Hide"})
    }
    render() {
        let nav = this.props.nav
        return (
            <nav>
                <h1>{this.state.title}</h1>
                <h2>{this.state.subtitle}</h2>
                <p>{this.state.show}</p>
                <button type="button" onClick={this.showNav}>Show menu</button> <br/>
                <p>{this.state.text2}</p>
                <input type="text" defaultValue={this.state.title} onInput={this.showText2}/>
                <ul>
                    {Object.keys(nav).map(elem => {
                        return <li key={elem}><a href="{nav[elem]}"> {elem} </a></li>;
                    })}
                </ul>
            </nav>
        );
    }

    showText2(e) {
        console.log('work2');
        this.setState({text2:e.target.value})
    }
}

export default Nav;
