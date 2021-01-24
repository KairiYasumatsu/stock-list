import React from 'react';

const SectorListScroll = (props) => (
    <div>
        <div>{props.title}</div>
        <div className="scrolling-wrapper">
            <div className="item"></div>
            <div className="item"></div>
            <div className="item"></div>
            <div className="item"></div>
            <div className="item"></div>
            <div className="item"></div>
            <div className="item"></div>
        </div>
    </div>
)

SectorListScroll.defaultProps = {
    title: 'セクター別銘柄分類'
};

export default SectorListScroll;