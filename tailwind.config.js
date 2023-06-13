/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

function rem(num, base = 16) {
	let parsedNum = num;

	// remove mesurment unit
	if (typeof num == 'string') {
		parsedNum = Number(num.replace(/(\d.)(.*)/, '$1'));
	}

	parsedNum = `${parsedNum / base}rem`;

	return parsedNum;
}

module.exports = {
	content: [
		'./templates/**/*.twig',
		'./assets/javascript/**/*.js',
	],
	theme: {
		container: {
			center: true,
		},
		extend: {
			colors: {
				green: 'rgba(0,255,0,1)',
				sand: '#f9f7f0',
			},
			fontFamily: {
				serif: [
					'DM Serif Display',
					...defaultTheme.fontFamily.serif,
				],
			},
		},
	},
	plugins: [],
};
