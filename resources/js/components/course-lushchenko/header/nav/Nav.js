import React, {Component} from "react";


class Nav extends Component {
    render() {
       let nav = this.props.nav
        return (
            <nav>
                Nav Bar Hello
                <ul>
                    {Object.keys(nav).map(elem => {
                        return <li key={elem}><a href="{nav[elem]}"> {elem} </a> </li>;
                    })}
                </ul>
            </nav>
        );
    }
}

export default Nav;
