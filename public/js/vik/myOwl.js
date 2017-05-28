/*"Призрачные" функции*/
function pushY() {
    ansver = true;
    return ansver;
}
function pushN() {
    ansver = false;
    return ansver;
}
function WhoIsAsk(n) {
    return (IsAsker = Asker.Name[n]) && (AskerName.innerHTML = Asker.NameTag[n]);
}
function getQuestion() {
    var n = getRandomInt(2, quest.length - 1);
    var temp = quest[n];
    quest.splice(n, 1);
    quest.splice(0, 0, temp);
    return a = quest[0],
        quest;
}
function getRep() {
    var List = [Question0, Question1, Question2, Question3, Question4, Question5];
    if (ansver) {
        Y = [List[a[1]].rep.Rabbit.Y, List[a[1]].rep.Squirrel.Y];
        return Y;
    }
    else {
        N = [List[a[1]].rep.Rabbit.N, List[a[1]].rep.Squirrel.N];
        return N;
    }
}
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
function Lost() {
    return elem.innerHTML = stat,
        e0.innerHTML = '',
        win1.innerHTML = '',
        AskerName.innerHTML = '',
        win.innerHTML = '<button onclick="restart()">Начать сначала</button>',
        willBe.innerHTML = '',
        document.body.childNodes[9].style.backgroundColor = 'red';
}
function restart() {
    return elem.innerHTML = '',
        cnt = 0,
        myOwl.rep.Rabbit = myOwl.rep.Squirrel = 0,
        e0.innerHTML = '#' + (1 + cnt) + '. ' + a[0],
        win.innerHTML = '<button onclick="WhoIsAsk(0)">Зови Зайцев!</button><button onclick="WhoIsAsk(1)">Зови белок!</button>',
        win1.innerHTML = '<button onmouseover="WatsUp(1)", onclick="pushY(), play(), WatsUp(1)">Да</button> <button onmouseover="WatsUp(0)", onclick="pushN(), play(), WatsUp(0)">Нет</button>',
        document.body.style.background = '',
        money.innerHTML = 1000,
        fail.innerHTML = '';
}
function WatsUp(n) {
    var temp;
    var List = [Question0, Question1, Question2, Question3, Question4, Question5];
    if (n) {
        temp = [List[a[1]].rep.Rabbit.Y, List[a[1]].rep.Squirrel.Y];
    }
    else {
        temp = [List[a[1]].rep.Rabbit.N, List[a[1]].rep.Squirrel.N];
    }
    if (IsAsker == Asker.Name[1]) {
        temp[0] = temp[0] + temp[1] - (temp[1] = temp[0]);
    }
    return willBe.innerHTML = temp;
}

/*Обявляем вопросы*/
var Question0 = {
    quest: {
        Num: 0,
        Q: 'Крайне выгодный вопрос для нашей фракции'
    },
    rep: {
        Rabbit: {
            Y: +3,
            N: -2
        },
        Squirrel: {
            Y: -2,
            N: 0
        }
    }
}
var Question1 = {
    quest: {
        Num: 1,
        Q: 'Средне выгодный вопрос для нашей фракции'
    },
    rep: {
        Rabbit: {
            Y: +2,
            N: -1
        },
        Squirrel: {
            Y: -1,
            N: 0
        }
    }
}
var Question2 = {
    quest: {
        Num: 2,
        Q: 'Маловыгодный вопрос для нашей фракции'
    },
    rep: {
        Rabbit: {
            Y: +1,
            N: -1
        },
        Squirrel: {
            Y: -1,
            N: 0
        }
    }
}
var Question3 = {
    quest: {
        Num: 3,
        Q: 'Маловыгодный вопрос для всех'
    },
    rep: {
        Rabbit: {
            Y: +1,
            N: -1
        },
        Squirrel: {
            Y: +1,
            N: -1
        }
    }
}
var Question4 = {
    quest: {
        Num: 4,
        Q: 'Выгодный вопрос для нашей, но не выгодный для другой фракции'
    },
    rep: {
        Rabbit: {
            Y: +1,
            N: -1
        },
        Squirrel: {
            Y: -1,
            N: +1
        }
    }
}
var Question5 = {
    quest: {
        Num: 5,
        Q: 'Не выгодный вопрос для всех фракций'
    },
    rep: {
        Rabbit: {
            Y: -1,
            N: +1
        },
        Squirrel: {
            Y: -1,

            N: +1
        }
    }
}
var myOwl = {
    rep: {
        Rabbit: 0,
        Squirrel: 0,
        Total: 0
    },
    money: 1000
}
var Asker = {
    Name: ['Rabbits', 'Squirrels'],
    NameTag: ['Просители - Зайцы', 'Просители - Белки']
}
/*Куча переменных*/
var n = 0;
var result;
var a = ['Маловыгодный вопрос для всех', 3];
var quest = [[Question0.quest.Q, Question0.quest.Num], [Question1.quest.Q, Question1.quest.Num], [Question2.quest.Q, Question2.quest.Num], [Question3.quest.Q, Question3.quest.Num], [Question4.quest.Q, Question4.quest.Num,], [Question5.quest.Q, Question5.quest.Num,]];
console.log(a);
var cnt = 0;
var e0 = document.getElementById('0');
var elem = document.getElementById('stat');
var AskerName = document.getElementById('Asker');
var counter = document.getElementById('cnt');
var fail = document.getElementById("fail");
var failName = document.getElementById("failName");
AskerName.innerHTML = Asker.NameTag[n];
var IsAsker = [];
e0.innerHTML = '#' + (1 + cnt) + '. ' + a[0];
var win = document.getElementById('win');
win.innerHTML = '<button onclick="WhoIsAsk(0)">Зови Зайцев!</button><button onclick="WhoIsAsk(1)">Зови белок!</button>';
var stat;
var win1 = document.getElementById('win1');
win1.innerHTML = '<button onmouseover="WatsUp(1)", onclick="pushY(), play(), WatsUp(1)">Да</button> <button onmouseover="WatsUp(0)", onclick="pushN(), play(), WatsUp(0)">Нет</button>';
var first = document.getElementById('first');
var WatsUpTag;
var willBe = document.getElementById('willBe');
var money = document.getElementById('money');
money.innerHTML = myOwl.money += myOwl.rep.Total * 1000

function play() {
    cnt++;
    result = getRep();

    if (IsAsker == Asker.Name[1]) {
        result[1]=result[1]+result[0]-(result[0]=result[1]);
        console.log(IsAsker, ',  ', result[1], ',  ', result[0]);
    }
    myOwl.rep.Squirrel += result[1];
    myOwl.rep.Rabbit += result[0];
    stat = ['#' + cnt +'. Ваша репутация у Зайцев: ' + myOwl.rep.Rabbit + '. Ваша репутация у Белок: ' + myOwl.rep.Squirrel + ' # ' + a[1] + '.<br>'];
    console.log();
    console.log('#', a[1], " Вопрос: ", a[0], '. Ответ: ', ansver,  '. Изменение репутации: Зайцы +(', result[0], '), Белки +(', result[1], ').')
    console.log(stat);
    elem.innerHTML = stat + elem.innerHTML;
    getQuestion();
    console.log(a);

    e0.innerHTML = '#' + (1 + cnt) + '. ' +a[0];
    counter.innerHTML = cnt;
    if (myOwl.rep.Rabbit <= -5) {
        fail.innerHTML = 'Вы никудышный правитель. Зайцы подняли бунт!';
        Lost();
    }
    else if (myOwl.rep.Squirrel <= -5) {
        fail.innerHTML = 'Вы никудышный правитель. Белки подняли бунт!';
        Lost();
    }
    myOwl.rep.Total = myOwl.rep.Rabbit + myOwl.rep.Squirrel
    money.innerHTML = myOwl.money += myOwl.rep.Total * 1000
}
