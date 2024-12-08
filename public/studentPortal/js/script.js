$(document).ready(function () {
  $("#user").click(function () {
    $("#user-links").slideToggle("slow");
  });
});

$(document).ready(function () {
  var isSidebarVisible = true;

  $("#bars").on("click", function () {
    if (isSidebarVisible) {
      $(".sidebar").animate({ left: "-20%" }, 300);
      $(".main-content").removeClass("with-sidebar").addClass("full-width");
    } else {
      $(".sidebar").animate({ left: "0" }, 300);
      $(".main-content").removeClass("full-width").addClass("with-sidebar");
    }
    isSidebarVisible = !isSidebarVisible;
  });
});

// To-Do-List Function
$(document).ready(function () {
  $("#saveNote").click(function () {
    var notehead = $("#note-h").val();
    var notedesc = $("#note-d").val();
    var currentDate = new Date().toLocaleString();

    if (notehead && notedesc) {
      var note = {
        content: notehead,
        description: notedesc,
        date: currentDate,
      };
      var notes = JSON.parse(localStorage.getItem("userNotes")) || [];
      notes.push(note);
      localStorage.setItem("userNotes", JSON.stringify(notes));
      $("#note-h").val("");
      $("#note-d").val("");
      loadNotes();
    }
  });
  function loadNotes() {
    var notes = JSON.parse(localStorage.getItem("userNotes")) || [];
    $("#notesList").empty();
    if (notes.length === 0) {
      $("#notesList").append("<p>No notes saved yet.</p>");
    } else {
      notes.forEach(function (note, index) {
        $("#notesList").append(
          '<div class="card p-4 note" style="width: 30rem;">' +
            '<h1 style="font-size: 20px; font-weight: 700; opacity: 0.7;">' +
            note.content +
            "</h1>" +
            "<h6><em>Created on: " +
            note.date +
            "</em></h6>" +
            '<p style="font-weight: 500;">' +
            note.description +
            "</p>" +
            "<span>" +
            '<a class="btn btn-danger my-2 deleteNote" style="font-size: 14px; font-weight: 600;" data-index="' +
            index +
            '">Delete</a>' +
            "</span>" +
            "</div>"
        );
      });
      $(".deleteNote").click(function () {
        var noteIndex = $(this).data("index");
        deleteNote(noteIndex);
      });
    }
  }
  function deleteNote(index) {
    var notes = JSON.parse(localStorage.getItem("userNotes")) || [];
    notes.splice(index, 1);
    localStorage.setItem("userNotes", JSON.stringify(notes));
    loadNotes();
  }
  loadNotes();
});
