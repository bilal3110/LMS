@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
@include('adminPanel.layout.side')
      <div class="main-content p-5">
        <div class="app-txt d-flex justify-content-between my-2">
          <h3 style="font-size: 30px; font-weight: 800; color: #00a3c9">
            My Diary
          </h3>
          <span class="">
            <!-- <a href="add-course.html" style="padding: 8px 10px; font-size: 18px; font-weight: 600;" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Notes</a> -->
            <button
              type="button"
              style="padding: 8px 10px; font-size: 18px; font-weight: 600"
              class="btn btn-success"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              Add Note
            </button>
          </span>
        </div>
        <hr />
        <!-- Modal -->
        <div
          class="modal fade"
          id="exampleModal"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                  Add Diary Content
                </h1>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="mb-3">
                      <label for="note-h" class="form-label">Title</label>
                      <input
                        type="text"
                        id="note-h"
                        class="form-control"
                        placeholder="Enter note title"
                        aria-describedby="titleHelp"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="note-d" class="form-label">Description</label>
                      <textarea
                        class="form-control"
                        id="note-d"
                        rows="3"
                        placeholder="Enter note description"
                      ></textarea>
                    </div>
                    <span>
                      <a id="saveNote" class="btn btn-success">Submit</a>
                    </span>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Ends -->

        <span class="d-flex flex-wrap gap-3" id="notesList"></span>

      </div>
    </div>
@endsection
