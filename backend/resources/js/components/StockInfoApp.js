import React from 'react';
import Header from "./Header";
import SectorListScroll from "./SectorListScrollComponents/SectorListScroll";

export default class StockInfoApp extends React.Component{
    render() {
        return (
            <div>
                <Header></Header>
                <h1>Hello component!</h1>
                <SectorListScroll></SectorListScroll>
            </div>
        );
    }
}