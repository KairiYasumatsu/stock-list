import React from 'react';

const ScrollContent = (props) => {
    <div className="scrolling-wrapper">
        <div className="item">{props.title}</div>
        <div className="item"></div>
        <div className="item"></div>
        <div className="item"></div>
        <div className="item"></div>
        <div className="item"></div>
        <div className="item"></div>
    </div>
}

Header.defaultProps = {
    title: 'セクター別'
};

export default ScrollContent;