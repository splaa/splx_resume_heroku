import React, {Component} from "react";
import logo from "../logo.svg";
import Nav from "./nav/Nav";


class Header extends Component {
    render() {
        let nav = this.props.nav;
        return (<>
                <header className="App-header">
                    <h1>{this.props.title}</h1>
                    <img src={logo} className="App-logo" alt="logo" width="100px"/>
                </header>
                <Nav nav={nav}/>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Assumenda beatae blanditiis consectetur dicta earum, facere
                    illum ipsum itaque numquam officia praesentium quos reiciendis,
                    reprehenderit ullam voluptate.
                    Dolores libero repellat totam?
                </p>
            </>
        );
    }

}

export default Header;
