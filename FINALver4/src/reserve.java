

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class reserve
 */
@WebServlet("/reserve")
public class reserve extends HttpServlet {
	private static final long serialVersionUID = 1L;
	Applicant person;
	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		createApplicant(request,response);
		out.println("<html>");
		out.println("<head><title>");
		out.println("</title>");
		out.println("</head>");
		out.println("<body>");
		String x = person.getSeat();
		try{
			int y = Integer.parseInt(x);
		out.print(y + " seats are reserved.<br>");
		out.print("<div align='center'>");
		out.print("<h1><font size='45'> Enjoy your meal<br>");
		out.println("<img src = 'hf.jpeg'><br>");
		}catch(Exception nFE){
			out.print("<font color='red'> Invalid input please try again.</font>");
			out.print("<form method='post' action='menu'");
			out.print("<p><input type='submit' value='Try Again'</p>");
		}
		
		out.print("</body>");
		out.print("</html>");
	}
	private void createApplicant(HttpServletRequest request, HttpServletResponse response) {
		person = new Applicant();
		person.setSeat(request.getParameter("seat"));
	}
}
