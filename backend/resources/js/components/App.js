import React from 'react';
import ReactDOM from 'react-dom';
import StockInfoApp from './StockInfoApp';
import '../styles/styles.scss';

if (document.getElementById('app')) {
    ReactDOM.render(<StockInfoApp />, document.getElementById('app'));
}
