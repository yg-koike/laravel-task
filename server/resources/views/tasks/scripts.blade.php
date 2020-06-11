<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script>
  flatpickr(document.getElementById('due_date'), {
    locale: 'ja',
    inline: true,
    enableTime: true,
    time_24hr: true,
    dateFormat: "Y/m/d H:i",
    minDate: new Date()
  });
</script>