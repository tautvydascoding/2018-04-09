// jshint esversion: 6

function Table(numOfRows, columnNames) {
  const rowSymbol = "-";
  const namedRowSymbol = "=";
  const columnSymbol = "|";
  const rowLineLength = columnNames.join("").length + columnNames.length * 3 + 1;

  this.outputToHTML = function() {
    document.querySelector(".table-output").innerHTML = getOutputString("<br>", "&nbsp;");
  };

  this.outputToConsole = function() {
    console.log(getOutputString("\n", " "));
  };

  function getOutputString(newLine, space) {
    var output = "Rows: " + numOfRows + " Columns: " + columnNames.length + newLine + newLine;

    for (var i = 0; i < numOfRows + 1; i++) {
      output += getLineString(i <= 1) + newLine;
      if (i === 0) output += getColumnString(true, space) + newLine;
      else output += getColumnString(false, space) + newLine;
    }

    output += getLineString(false) + newLine;
    return output;
  }

  function getLineString(isNamed) {
    var rs = isNamed ? namedRowSymbol : rowSymbol;
    return rs.repeat(rowLineLength);
  }

  function getColumnString(withColumnNames, space) {
    var output = "";
    for (var i = 0; i < columnNames.length; i++) {
      var cellContent = withColumnNames ? columnNames[i] : space.repeat(columnNames[i].length);
      output += columnSymbol + " " + cellContent + " ";
    }

    output += columnSymbol;
    return output;
  }
}

var numOfRows = prompt("--- Enter num of rows:");
var numOfColumns = prompt("| | | Enter num of columns:");
var columnNames = [];

for (var i = 0; i < numOfColumns; i++) {
  columnNames.push(prompt("Enter name of column #" + (i + 1)));
}

var table = new Table(parseInt(numOfRows), columnNames);
table.outputToConsole();
table.outputToHTML();

// end main.js
console.log("end main.js");
