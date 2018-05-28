const { splitIncreasing } = require('./assignment1');
import test from 'ava';

test('single value', t => {
    t.is(splitIncreasing([1]), [[1]]);
});

test('normal array', t => {
    t.is(splitIncreasing([1, 2, 3, 1, 2, 3, 4, 0]), [[1, 2, 3], [1, 2, 3, 4], [0]]);
});

test('test with negative numbers', t => {
    t.is(splitIncreasing([-1, -2]), [[-1], [-2]]);
});

test('with same numbers', t => {
    t.is(splitIncreasing([1, 1]), [[1], [1]]);
    t.is(splitIncreasing([1, 2, 3, 3, 4, 5]), [[1, 2, 3], [3, 4, 5]]);
});

test('with extreme numbers', t => {
    let min = Number.MIN_SAFE_INTEGER;
    let max = Number.MAX_SAFE_INTEGER;

    t.is(splitIncreasing([min, max, min, max]), [[min, max], [min, max]]);
});

test('with an empty array', t => {
   t.is(splitIncreasing([]), []);
});
