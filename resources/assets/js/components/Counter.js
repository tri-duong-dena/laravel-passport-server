import React, { Component, PropTypes } from 'react'
class Counter extends Component {
  static propTypes = {
    value: PropTypes.number.isRequired,
    onIncrement: PropTypes.func.isRequired,
    onDecrement: PropTypes.func.isRequired
  }

  incrementIfOdd = () => {
    if (this.props.value % 2 !== 0) {
      this.props.onIncrement()
    }
  }

  incrementAsync = () => {
    setTimeout(this.props.onIncrement, 1000)
  }

  componentDidMount() {
    console.log('Component mounted' + Laravel.csrfToken)
    fetch('/api/user', {
    credentials: 'same-origin',
    headers: {
      //'Authorization': 'Bearer ' + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjY0ZDBkNWYxOWRjNzA2MzM5ZjI0OGQwYWY1OTE5ZmQwYzU1NDM4M2ZlZDNkNzA0ZGM4NTMzNGRlYmRiN2I2NzBkZTk2NDMxNWI0NzQ0NTE3In0.eyJhdWQiOiIzIiwianRpIjoiNjRkMGQ1ZjE5ZGM3MDYzMzlmMjQ4ZDBhZjU5MTlmZDBjNTU0MzgzZmVkM2Q3MDRkYzg1MzM0ZGViZGI3YjY3MGRlOTY0MzE1YjQ3NDQ1MTciLCJpYXQiOjE0ODA2Njc2MTcsIm5iZiI6MTQ4MDY2NzYxNywiZXhwIjoxNTEyMjAzNjE3LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.aXhHesN8kjUVi1GzxirswMO66dtfaFvszHGOzLzO3FvZMufWUHk-gSl5kKTRXQSEClRJr4d7xGj15DIJLVj0-IU-HEsAYoGmOp0VItxc2bPrsmKSnmowhItu4_VmIHbdvaVW7GZ5enNO5vG9gDe5FQOmk-nI1-Z5sbKDEDuHbS0bacCgkL1vD1lz6StGlcO1K4pCTEXqW6yO84-x4I-XM8Vbuo7CPVNM8dP4th3ZPi8wXwlZggaixEGH6kh_YtRVmrjivc-eJPT5hGS_WaMCBVOD6xFVnQM-Ktnw_YIfrB3uokaiFv9Tk-rLzMXu-xKvatnNvKNfZFLnrXOW8FK-UFvGf_KI3Ifnu1xIaZWnU4_4GAulSp6oAIlUTCjL-QQEVd0knqIzYKqp-HWPvHLC5zh9lWBFx5ZfhnsWNqPyN_oVtq3xLeq_g9--dZEH4R6EHcc_QM414UNp6Nc-Z4xMWNjss8bgbC4vimLtgTnhyjetjScC4PlkdKohVb_6d5QQTm7gWyrDkcWzynMuRqlQfEtQEecOiUKbXYXNNdVLfEVDKqejx4FU7DKfpfP9RYw3YhgzIED1phBFHNePZfxo-1tUyzeJkAgbR2n68SXM4H6roXgswoP-XaM4MIHa6sUHSqC0qrffQ-mo9vFNFGhyaKzPCmij15-B2aJWv8QKsJs'
      'X-CSRF-TOKEN': Laravel.csrfToken
    }
    })
        .then((result) => result.json())
        .then((resultJson) => {
            console.log(resultJson)
            console.log(resultJson.email)
        })
  }

  render() {
    const { value, onIncrement, onDecrement } = this.props
    return (
      <p>
        Clicked: {value} times
        {' '}
        <button onClick={onIncrement}>
          +
        </button>
        {' '}
        <button onClick={onDecrement}>
          -
        </button>
        {' '}
        <button onClick={this.incrementIfOdd}>
          Increment if odd
        </button>
        {' '}
        <button onClick={this.incrementAsync}>
          Increment async
        </button>
      </p>
    )
  }
}

export default Counter
